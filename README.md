# Selenium-and-automation-testing  
Projects, files and notes related to selenium and automation testing at vivabooks.  
Note: Download and Install jdk8u, eclipse ide for JEE, selenium web driver, selenium client driver and selenium chrome driver.   
[Link for tutorial 1: Setup and build](https://www.youtube.com/watch?v=U-JRw7yRFcA)  
[Link for tutorial 2: Record and test](https://www.youtube.com/watch?v=sVbXRfmipeg)  
There are some issues in tuorial which are resolved by me:  
1) First import all the webdriver and chrome driver in script  
(import org.openqa.selenium.WebDriver;  
import org.openqa.selenium.chrome.ChromeDriver;  
import org.openqa.selenium.chrome.ChromeOptions;
public)  
2) In build path setup put all the files in class path, not in module path.  
3) Add selenium server stand alone, client and client source to build path.  

## Steps in selenium projects
1) Create a java selenium test  
2) Record a test and convert into java selenium test
3) Install katalon recorder plugin in chrome for recording manual tests  
4) Install TestNG library and setup and crate a new package for testng programs and tests  
