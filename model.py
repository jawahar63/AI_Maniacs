import pandas as pd
import numpy as np
import pickle
career = pd.read_csv('dataset9000.data', header = None)
#np.dtype('float64')

X = np.array(career.iloc[:, 0:17]) #X is skills
# print(X)
y = np.array(career.iloc[:, 17]) #Y is Roles
# print(y)

##  attribute to return the column labels of the given Dataframe
career.columns = ["Database Fundamentals","Computer Architecture","Distributed Computing Systems",
"Cyber Security","Networking","Development","Programming Skills","Project Management",
"Computer Forensics Fundamentals","Technical Communication","AI ML","Software Engineering","Business Analysis",
"Communication skills","Data Science","Troubleshooting skills","Graphics Designing","Roles"]

career.dropna(how ='all', inplace = True)
#print("career.dropna(how ='all', inplace = True)",career.dropna(how ='all', inplace = True))
career.head()

## splitting the data into training and test sets 
from sklearn.model_selection import train_test_split 
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.30, random_state = 27, stratify=y)
from sklearn.svm import SVC
from sklearn.neighbors import KNeighborsClassifier
from sklearn.ensemble import BaggingClassifier
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import cross_val_score, KFold
from sklearn.metrics import accuracy_score

classifiers = [KNeighborsClassifier(n_neighbors=5), SVC(kernel='poly', probability=True)]

def compare_models_cross_val(k):

    for model in classifiers:
        
        cv_score = cross_val_score(model, X_test, y_test, cv= k)
        mean_acc = sum(cv_score) / k
        print("Mean Percentage accuracy of ", model, ": ", round(mean_acc*100, 4), "%")
        print("-------------------------------------------------------")

def get_accuracy_score():
    
    for model in classifiers:
        model.fit(X_train, y_train)
        y_pred = model.predict(X_test)
        test_acc = accuracy_score(y_pred, y_test)
        print("Accuracy scores of ", model, ": ", test_acc)
        print("-------------------------------------------------------")
        
get_accuracy_score()
base_cls = DecisionTreeClassifier()
num_trees = 5
kfold = KFold(n_splits = 15)
model = BaggingClassifier(estimator = base_cls,
                          n_estimators = num_trees,
                          random_state = 5)
  
model.fit(X_train, y_train)
y_pred = model.predict(X_test)
test_acc = accuracy_score(y_pred, y_test)
print("Accuracy scores of ", model, ": ", test_acc)
print("-------------------------------------------------------")
print("-------------------------------------------------------")

compare_models_cross_val(7)
results = cross_val_score(model, X, y, cv = kfold)
print("Mean Percentage accuracy of", model, ":", results.mean()*100)

pickle.dump(classifiers[1], open('careerlast.pkl','wb'))
print('test file created')