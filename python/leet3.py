class Solution:
  def result(self, s: str)->int:
   maxLen = 0
   box = ''
   for letter in s: 
    box = box[box.find(letter)+1 :]     
    box += letter
    maxLen = max(maxLen, len(box))
    
   return maxLen
   
print(Solution().result("pwwkew"))