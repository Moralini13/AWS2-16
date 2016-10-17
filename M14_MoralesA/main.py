from flask import Flask
from flask import render_template
app = Flask(__name__)

@app.route("/")
def hello():
    return render_template('base.html')
    
@app.route('/prova')
def templates():
    return render_template('prueba.html') 
    
@app.route('/calendari')
def cal():
	return render_template('calendario.html')
	
	
@app.route('/sudoku')
def sudoku():
	return render_template('sudoku.html')


if __name__ == "__main__":
    app.run()
