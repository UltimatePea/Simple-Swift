
var a = 2

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

a = power(a, b:10)

print("The value of a is \(a)")