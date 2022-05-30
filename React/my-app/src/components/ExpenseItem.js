import './ExpenseItem.css'


function ExpenseItem(){
    const expenseDate = Date('2022,2,28');
    const expenseTitle = 'Car Insurance'
    const expensiveAmount = 292.67
    return (
      <div className="expense-item">
        <div>{ expenseDate.toString() }</div>
        <div className="expense-item__description">
          <h2>{expenseTitle}</h2>
          <div className="expense-item__price">${expensiveAmount}</div>
        </div>
      </div>
    );
}
export default ExpenseItem;