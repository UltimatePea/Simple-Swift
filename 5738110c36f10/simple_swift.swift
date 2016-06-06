var ol : [Int] = Array(count:1000000 , repeatedValue:0)
func pow(b: Int, _ e: Int) -> Int{
if e == 0 { return 1}
return pow(b, e-1)
}
for val in 1...ol.count-1 {
ol[val] = pow(val,2)
}
for i in 1...ol.count-1 { for j in 1...ol.count-1 { if i !=j {}}}