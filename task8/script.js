

var employees =[];

var director,
    name,
    surname,
    rate,
    days;

var createEmployee = document.getElementById("createEmployee"),
    createBoss = document.getElementById("createBoss");


function Employee(name, surname, rate, days) {
    this.name = name;
    this.surname = surname;
    this.rate = rate;
    this.days = days;
}

function Director(name, surname, rate, days) {
    this.name = name;
    this.surname = surname;
    this.rate = rate;
    this.days = days;
    employees = [];
}

function getEmployeeInput() {
    name = document.getElementById('name').value;
    surname = document.getElementById('surname').value;
    rate = document.getElementById('rate').value;
    days = document.getElementById('days').value;
}

function getBossInput() {
    name = document.getElementById('name').value;
    surname = document.getElementById('surname').value;
    rate = document.getElementById('rate').value;
    days = document.getElementById('days').value;
}

function createBoss() {
    director = new Director(name, surname, rate, days)
}

createEmployee.addEventListener('click', getEmployeeInput());
createEmployee.addEventListener('click', function() { director.addWorker(name, surname, rate, days) });

createBossBtn.addEventListener('click', getBossInput);
createBossBtn.addEventListener('click', createBoss.bind(name, surname, rate, days));
createBossBtn.addEventListener('click', showControllMenu);