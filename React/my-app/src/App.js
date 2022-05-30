import logo from './logo.svg';
import './App.css';
import ExpenseItem from './components/ExpenseItem';

function App() {
  const expenses = [
                     {   title: 'Car Insurance',
                         amount: 294.67 , date: new Date(2021, 2, 29)},
                    ];
  return (
          <div className="App">
                <header className="App-header">
                     <ExpenseItem></ExpenseItem>
                     <ExpenseItem></ExpenseItem>
                     <ExpenseItem></ExpenseItem>
                     <ExpenseItem></ExpenseItem>
                     <ExpenseItem></ExpenseItem>
                </header>
          </div>
  );
}

export default App;
