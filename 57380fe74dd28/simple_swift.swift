print("Hello, World!!")

var ol : [Int] = Array(count:1000000 , repeatedValue:0)

var i = 0

func pow(b: Int, _ e: Int) -> Int{
if e == 0 { return 1}
return pow(b, e-1)
}

for val in 1...ol.count {
i+=1

}