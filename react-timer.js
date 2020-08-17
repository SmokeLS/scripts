import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import * as serviceWorker from './serviceWorker';


class Timer extends React.Component{
  constructor(props){
    super(props);
    this.state = { date: new Date()}
  }
  tick(){
    this.setState({
      date: new Date()
    });
  }
  componentDidMount(){
    this.timerId = setInterval(()=> this.tick(),1000);
  }
  componentWillUnmount(){
    clearInterval(this.timerId);
  }
  render(){
    return(
      <h1>Сейчас время {this.state.date.toLocaleTimeString()}</h1>
    )
  }
}





ReactDOM.render(
  <React.StrictMode>
    <Timer />
  </React.StrictMode>,
  document.getElementById('root')
);


// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
serviceWorker.unregister();
