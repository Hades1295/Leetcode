const nums = [1, 2, 3, 3, 4, 5];
var isPossible = function(nums) => {
   const count = nums.reduce((acc, num) => {
      acc[num] = (acc[num] || 0) + 1
      return acc
   }, {})
   const needed = {}
   for (const num of nums) {
      if (count[num] <= 0) {
         continue
      }
      count[num] -= 1
      if (needed[num] > 0) {
         needed[num] -= 1
         needed[num + 1] = (needed[num + 1] || 0) + 1
      } else if (count[num + 1] > 0 && count[num + 2]) {
         count[num + 1] -= 1
         count[num + 2] -= 1
         needed[num + 3] = (needed[num + 3] || 0) + 1
      } else {
         return false
      }
   }
   return true
}
console.log(isPossible(nums));