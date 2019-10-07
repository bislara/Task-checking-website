#include <iostream>
int main()
{
int a,b,c,n,k=0,g;
std::cout<<"enter a number ";
std::cin>>n;
g=n;
for(a=0;a<=n;a++)
{
	for(b=n;b>=0;b--)
{
	
	if(k<g)
	{
		std::cout<<" ";
    } 
	else
	{  
	std::cout<<b;
    }
	k++;
}
g=g-1;
k=0;
for(c=1;c<=a;c++)
{
    std::cout<<c;
}
std ::cout<<"\n";
}
}	
