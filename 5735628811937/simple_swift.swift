print("Hello, World!!")

//Fermat's Last Theorem


func power(a: Int, b:Int) -> Int {
if b==0 { return 1}
return a * power(a, b:b-1)
}


var pl = [[Int]]()

for i in 0...1000{
for j in 0...1000{
pl[i][j] = power(i, b:j)
}}