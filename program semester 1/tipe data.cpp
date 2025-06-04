#include <iostream>
using namespace std;

int main(){

    string nama ;
    int umur;
    char jenis_kelamin;

    cout << "Nama kamu?";
    cin >> nama;

    cout << "umur kamu?";
    cin >> umur;

    cout << "jenis kelamin [L/P]";
    cin >> jenis_kelamin;

    cout << "Salam kenal," << nama << "dan kamu berumur";
    cout << umur << "Dan jenis kelamin" << jenis_kelamin ;

    return 0;
 
}