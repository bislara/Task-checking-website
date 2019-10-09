// C++ program to check if string1 can be
// converted to string2 using XOR and OR operations
#include <bits/stdc++.h>
using namespace std;
 
// function to check if conversion is possible or not
bool solve(string s1, string s2)
{
    bool flag1 = 0, flag2 = 0;
 
    // if lengths are different
    if (s1.length() != s2.length()) 
        return false;
     
    int l = s1.length();
 
    // iterate to check if both strings have 1
    for (int i = 0; i < l; i++) {
 
        // to check if there is
        // even one 1 in string s1
        if (s1[i] == '1')
            flag1 = 1;
 
        // to check if there is even
        // one 1 in string s2
        if (s2[i] == '1')
            flag2 = 1;
 
        if (flag1 && flag2)
            return true;
    }
 
    // if both string do not have a '1'.
    return false;
}
 
// Driver code
int main()
{
    string s1 = "000";
    string s2 = "110";
 
    if (solve(s1, s2))
        cout << "Yes";
    else
        cout << "No";
    return 0;
}
