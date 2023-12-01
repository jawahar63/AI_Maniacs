import pickle
from flask import Flask, render_template, request

app = Flask(__name__)

model_filename = "medical.pkl"
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
            int(request.form["input5"]),
            int(request.form["input6"]),
            int(request.form["input7"]),
            int(request.form["input8"]),
            int(request.form["input9"]),
            int(request.form["input10"]),
            int(request.form["input11"]),
            int(request.form["input12"]),
            int(request.form["input13"]),
            int(request.form["input14"]),
        ]
        prediction = loaded_model.predict([input_values])[0]
        result = prediction 
        return render_template("result.html", result=result)
    return render_template("medicaltest.html")

if __name__ == "__main__":
    app.run(debug=True)
