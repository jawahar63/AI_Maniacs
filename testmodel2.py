import pandas as pd
import numpy as np
import pickle
from sklearn.model_selection import train_test_split
from sklearn.ensemble import RandomForestClassifier
from sklearn import metrics

# Load the dataset
career = pd.read_csv('dataset9000.data', header=None)

# Assign column names
career.columns = [
    "Database Fundamentals", "Computer Architecture", "Distributed Computing Systems",
    "Cyber Security", "Networking", "Development", "Programming Skills", "Project Management",
    "Computer Forensics Fundamentals", "Technical Communication", "AI ML", "Software Engineering",
    "Business Analysis", "Communication skills", "Data Science", "Troubleshooting skills",
    "Graphics Designing", "Roles"
]

# Drop rows with missing values
career.dropna(how='all', inplace=True)

# Split features (X) and target variable (y)
X = np.array(career.iloc[:, 0:17])  # X is skills
y = np.array(career.iloc[:, 17])  # y is Roles

# Split the data into training and test sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=524)

# Create and train the Random Forest Classifier
rfc_100 = RandomForestClassifier(n_estimators=100, random_state=0)
# fit the model to the training set
rfc_100.fit(X_train, y_train)

# Predict on the test set results
y_pred_100 = rfc_100.predict(X_test)

# Check accuracy score 
from sklearn.metrics import accuracy_score
print('Model accuracy score with 100 decision-trees : {0:0.4f}'. format(accuracy_score(y_test, y_pred_100)))

# Save the trained model
pickle.dump(rfc_100, open('career_rf_model.pkl', 'wb'))
print('Random Forest classifier model saved.')

