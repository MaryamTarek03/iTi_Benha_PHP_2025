// Debugging Challenge 1
function challenge1() {
  console.log(a); // undefined
  // console.log(b); // ReferenceError
  // console.log(c); // ReferenceError
  var a = 1;
  let b = 2;
  const c = 3;
  if (true) {
    console.log(a); // 1
    console.log(b); // 2
    // console.log(c); // 3
    var a = 4; // changes
    let b = 5; // shadowed
    const c = 6; // shadowed
  }
  console.log(a); // 4
  console.log(b); // 2
  console.log(c); // 3
}
// challenge1();

// Your task: Predict the output, then test it, then explain why

class Customer {
  constructor(name, email, balance, pinCode) {
    this.name = name;
    this.email = email;
    this.balance = balance;
    this.pinCode = pinCode;
  }

  getDetails() {
    return `Name: ${this.name}, Email: ${this.email}, Balance: ${this.balance}`;
  }

  deposit(amount) {
    this.balance += amount;
    return this.balance;
  }

  withdraw(amount) {
    this.balance -= amount;
    return this.balance;
  }

  showBalance() {
    return `Current balance: ${this.balance}`;
  }
}

class Logger {
  successLog(message) {
    return prompt(`✅ ${message}`);
  }

  errorLog(message) {
    return prompt(`❌ ${message}`);
  }

  infoLog(message) {
    return prompt(`ℹ️ ${message}`);
  }
}

const customers = [
  new Customer("Maryam Tarek", "maryam@gmail.com", 2000, 1234),
  new Customer("Muhammed Tarek", "muhammed@gmail.com", 3000, 1234),
];
const logger = new Logger();

let email = logger.infoLog("Enter your email:");
let customer = customers.find((c) => c.email === email);
while (!customer) {
  email = logger.errorLog("Customer not found. Please enter your email again:");
  customer = customers.find((c) => c.email === email);
}
let attempts = 0;
let pinCode = logger.infoLog("Enter your pin code:");
while (pinCode != customer.pinCode) {
  if (attempts >= 2) {
    alert("❌Too many attempts. Exiting...");
    throw new Error("Too many attempts");
  }
  attempts++;
  pinCode = logger.errorLog(
    "Invalid pin code, you have " +
      (3 - attempts) +
      " attempts left. Please enter your pin code again:"
  );
}
alert("Customer found: " + customer.getDetails());

let operation = "0";
while (operation !== "3") {
  operation = logger.infoLog(
    "Enter one of this options \n'1' Deposit money\n'2' Withdraw money\n'3' Exit"
  );
  decideAction(operation, () => {
    operation = logger.errorLog(
      "Invalid operation. Please enter '1' to deposit, '2' to withdraw, or '3' to exit:"
    );
  });
}

function decideAction(operation, fun) {
  switch (operation) {
    case "1":
      let depositAmount = getAmount();
      customer.deposit(depositAmount);
      alert("✅Deposit successful. " + customer.showBalance());
      break;
    case "2":
      let withdrawAmount = getAmount();
      customer.withdraw(withdrawAmount);
      if (withdrawAmount > customer.balance) {
        alert("❌ Insufficient balance");
      } else {
        alert("✅Withdrawal successful. " + customer.showBalance());
      }
      break;
    case "3":
      alert("Exiting...");
      break;
    default:
      fun();
      break;
  }
}

function getAmount() {
  let amount = parseFloat(prompt("Enter the amount:"));
  while (isNaN(amount) || amount <= 0) {
    amount = parseFloat(
      prompt("Invalid amount. Please enter a positive number:")
    );
  }
  return amount;
}
