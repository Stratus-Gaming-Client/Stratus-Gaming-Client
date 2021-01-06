console.logFunc = console.log;
console.logs = [];
console.log = function(input) {
  console.logFunc(input);
  console.logs[console.logs.length] = input;
}
