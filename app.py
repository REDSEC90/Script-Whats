from flask import Flask, request, jsonify
from database import db, init_db
from models.message import Message
import datetime

app = Flask(__name__)
init_db()

@app.route('/api/send_message', methods=['POST'])
def send_message():
    data = request.json
    phone = data.get("phone")
    message = data.get("message")
    repeat = int(data.get("repeat", 1))
    schedule = data.get("schedule")

    if not phone or not message:
        return jsonify({"error": "Campos obrigatórios ausentes"}), 400

    new_message = Message(phone=phone, content=message, repeat=repeat, schedule=schedule)
    db.session.add(new_message)
    db.session.commit()

    return jsonify({"message": "Mensagem registrada com sucesso!"}), 201

if __name__ == '__main__':
    app.run(debug=True, port=5000)
