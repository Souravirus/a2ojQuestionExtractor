This is a web scrapper to download more than one questions of a2oj website as .html file. So to make this code work in your computer .

1.First of all there should be php in your computer. To install php in your computer you can see many guides on google.

2.Now there should also be php-curl in your computer.I installed it in my computer by 
```
sudo apt-get install php7.0-curl
```
3.Now make a folder  named questions where you have downloaded this folder.

4.Now you have to make multiple folders in the question directory.You can make that by following the steps:
Step 1:First run the scrappercurl.html program and see how many categories are there. Let that number be i.
Step 2:Then make that number of directories by running the following command in linux:
```
mkdir cat{1...i}
```

5.Now go to terminal and type 
```
php scrappercurl.php
```
PS. This program is not in its best version for now. I have make to much improvements in this code. If anyone one to contribute then your help would be much appreciated.

