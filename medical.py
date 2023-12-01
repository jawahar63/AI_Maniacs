import pandas as pd
import numpy as np
data=pd.read_csv("medical.csv")
X=data.drop(["Course"], axis=1)
y = data['Course']

from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn.metrics import accuracy_score
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.1, random_state=42)
num_estimators = 300
random_forest_classifier = RandomForestClassifier(n_estimators=num_estimators, random_state=42)
random_forest_classifier.fit(X_train, y_train)
y_pred = random_forest_classifier.predict(X_test)
accuracy = accuracy_score(y_test, y_pred)
print(f"Accuracy: {accuracy:.2f}")

import pickle
model_filename = "medical.pkl"
with open(model_filename, "wb") as model_file:
    pickle.dump(random_forest_classifier, model_file)

print(f"Model saved as {model_filename}")