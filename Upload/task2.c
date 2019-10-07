#include <iostream>
int main()
{
	int k;
	std::cout<<"enter no. of voters ";
	std::cin>>k;
    int a[k],i,g=0,max=0;
	int n[8]={0,0,0,0,0,0,0,0};
	for(i=0;i<k;i++)
{
	std::cout<<"enter voter "<<(i+1) <<" casted vote ";
	std::cin>>a[i];
	if(a[i]>8)
	{
		std::cout<<"invalid voter.enter again \n";
		std::cout<<"enter voter "<<(i+1)<<" casted vote ";
        std::cin>>a[i];
	}	
	std::cout<<"\n";
}
for(i=0;i<k;i++)
{
	if(a[i]==1)
    n[0]++;
    else if(a[i]==2)
    n[1]++;
    else if(a[i]==3)
    n[2]++;
    else if(a[i]==4)
    n[3]++;
    else if(a[i]==5)
    n[4]++;
    else if(a[i]==6)
    n[5]++;
    else if(a[i]==7)
    n[6]++;
    else if(a[i]==8)
    n[7]++;
    
 }
 for(i=0;i<8;i++)
 {
 std::cout<<"the vote count of candiate "<<(i+1) <<"  is " <<n[i]<<"\n";
 }
 max=n[0];
for(i=0;i<=7;i++)
{
	if(n[i]>max)
    {
    	max=n[i];
    	g=i+1;
	}

}
std::cout<<"the winner is candidate "<<g;
}
