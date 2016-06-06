print("Hello, World!!")

//Fermat's Last Theorem


func power(a: Int, b:Int) -> Int {
/*
var product = 1
for _ in 1...b {
product = product * a
}
return product*/
if b==0 { return 1}
return a * power(a, b:b-1)
}


var pl : [[Int]] = [[]]

for i in 1...1000{
for j in 1...1000{
