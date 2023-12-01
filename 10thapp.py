import pickle
from flask import Flask, render_template, request

app = Flask(__name__)

model_filename = "10th.pkl"
with open(model_filename, "rb") as model_file:
    loaded_model = pickle.load(model_file)

# Define the route for the prediction form
@app.route("/", methods=["GET", "POST"])
def index():
    if request.method == "POST":
        input_values = [
            int(request.form["input1"]),
            int(request.form["input2"]),
            int(request.form["input3"]),
            int(request.form["input4"]),
        ]
        prediction = loaded_model.predict([input_values])[0]
        result = prediction 
        return render_template("10thresult.html", result=result)
    return render_template("10thtest.html")

if __name__ == "__main__":
    app.run(host='127.0.0.3', port=5000)
