#include <bits/stdc++.h>
#include"iostream"
using namespace std;

main()
{
	int arr[]={12, 1, 12, 3, 12, 1, 1, 2, 3, 2, 2, 3, 7};
	int out =0;
	//memset(out,0,sizeof(out));
	int i,j,k=0,n=13;
	for(i=0;i<n;i++)
	{
		j=i+1;
		int count=0;
		while(j<n)
		{
			if(arr[i]==arr[j])
			{
				count++;
				for(k=j;k<n;k++)
				arr[k]=arr[k+1];
				n--;
			}
			else
				j++;
		}
		if(count==0)
		{
			out=arr[i];
			//cout<<"inside loop"<<arr[i]<<endl;
		}
		cout<<"the count is "<<count<<endl;
		cout<<"arr "<<arr[i]<<endl;
	}
	//for(i=0;i<k;i++)
	cout<<out<<endl;
}
