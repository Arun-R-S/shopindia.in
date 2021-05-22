from flask import Flask,render_template,flash, redirect,url_for,session,logging,request
from flask_sqlalchemy import SQLAlchemy

app = Flask(__name__)
@app.route("/")
def index():
    return render_template("index.php")
if __name__ == "__main__":
    db.create_all()
    app.run(debug=True)