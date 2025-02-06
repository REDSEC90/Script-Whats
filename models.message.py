from database import db

class Message(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    phone = db.Column(db.String(20), nullable=False)
    content = db.Column(db.Text, nullable=False)
    repeat = db.Column(db.Integer, default=1)
    schedule = db.Column(db.DateTime, nullable=True)
