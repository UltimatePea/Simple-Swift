
var a = 2


func add(a: Int, b:Int) -> Int {
return a + b
}

func power(a: Int, b:Int) -> Int {
/*
var product = 1
for _ in 1...b {
product = product * a
}
return product*/
return a * power(a, b:b-1)
}

a = power(a, b:10)

print("The value of a is \(a)")