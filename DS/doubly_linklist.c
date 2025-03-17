#include <stdio.h>
#include <stdlib.h>
struct doubly_linklist {
    int info;
    struct doubly_linklist *pre,*next;
};
typedef struct doubly_linklist node;
node*first;
void create(node*temp)
{
    if(temp==NULL)
    {
        first=(node*)malloc(sizeof(node));
        printf("Insert Element ");
        scanf("%d",&first->info);
        first->next=NULL;
        first->pre=NULL;
    }
}
void insert_last(node*temp)
{

}
int main()
{
first=NULL;
int ch;

    while(1)
    {
        printf("\n\t\t\t MENU");
        printf("\n\t\t\t=======");
        printf("\n\t\t\t 1.CREATE");
        printf("\n\t\t\t 2. INSERT LAST");
        printf("\n\t\t\t Enter Your Choice : ");
        scanf("%d",&ch);

        switch(ch)
        {
            case 1:
            create(first);
            break;

            case 2:
            insert_last(first);
            break;

            default :
             printf("Enter valid Choice");
             break;
        }
        
    }
}