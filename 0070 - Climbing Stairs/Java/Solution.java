class Solution {
    public int climbStairs(int n) {
        int a = 0, b = 1, temp = 0;
        for(int i = 0; i < n; i++) {
            temp = b; 
            b = b + a; 
            a = temp;
        }
        return (n > 0) ? b : 0;
    }
}