public class Solution {
    public int MajorityElement(int[] nums) {
        Dictionary<int,int> items = new Dictionary<int,int>();
        int maxKey = -1;
        int maxValue = 0;
        
        foreach(int x in nums){
            if(items.ContainsKey(x))
                items[x] += 1;
            else
                items.Add(x,1);
            
            if(items[x] > maxValue){
                maxValue = items[x];
                maxKey = x;
            }
        }
        
        
        return maxKey;
    }
}