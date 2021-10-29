import React from 'react';
import ReactDOM from 'react-dom';
import './style.css';


function primeiroJSX() {
  return (
    <div>
      Maicon Brassanini - Introdução ao React
    </div>

  
  )
}

const App = () =>{

  return (
    <div className="App">
      {primeiroJSX()}
    </div>
    )
}


const rootElement = document.getElementById('root')
ReactDOM.render(<App />, rootElement)



