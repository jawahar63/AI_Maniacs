from flask import Flask, render_template, request

app = Flask(__name__)

# Define the list of questions and career keywords
questions = [
    "What subjects or topics are you most passionate about?",
    "Are there any hobbies or activities you enjoy during your free time?",
    "Would you prefer a career that allows you to help people directly or work behind the scenes to problem solve?",
    "Are you willing to invest several years in higher education for your career?",
    "Do you enjoy building or designing things?",
    "Are you comfortable taking care of older people and interacting with them?"
]

career_keywords = {
    "engineering": ["coding", "problem solving", "math", "science", "technology", "help people directly", "building", "mobile", "laptops"],
    "arts": ["accounts", "tamil", "english", "history", "creative", "extracurricular activities", "social", "economics", "designing"],
    "medical": ["medicine", "healthcare", "biology", "chemistry", "work behind", "investing"],
    "non-technical": ["arts", "music", "painting", "creative", "extracurricular activities", "social", "economics", "help people directly", "designing"],
    "business": ["entrepreneurship", "finance", "e-commerce", "startup"],
}

# Initialize scores for each career sector
career_scores = {sector: 0 for sector in career_keywords.keys()}

@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        user_responses = [request.form[str(i)].lower() for i in range(len(questions))]
       
        for user_response in user_responses:
            for sector, keywords in career_keywords.items():
                for keyword in keywords:
                    if keyword in user_response:
                        career_scores[sector] += 1

        suggested_career = max(career_scores, key=lambda sector: career_scores[sector])

        if career_scores[suggested_career] > 0:
            suggested_career = suggested_career.capitalize()
        else:
            suggested_career = "undetermined"

        return render_template('result1.html', suggested_career=suggested_career)

    return render_template('index.html', questions=questions)

if __name__ == "__main__":
    app.run(host='127.0.0.4', port=5000)
