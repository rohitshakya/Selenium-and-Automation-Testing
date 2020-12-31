package viva;
import java.util.*;
import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.chrome.ChromeOptions;
import org.openqa.selenium.support.ui.Select; 
public class TestScript2 {
	public static void main(String[] args) throws InterruptedException {
        // declaration and instantiation of objects/variables
    	System.setProperty("webdriver.chrome.driver","C:\\selenium\\selenium-java-3.141.59\\chromedriver_win32\\chromedriver.exe");
		WebDriver driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
		driver.manage().timeouts().pageLoadTimeout(40,TimeUnit.SECONDS);
    	
        String baseUrl = "http://google.com/";
        String expectedTitle = "Google";
        String actualTitle = "";

        // launch Fire fox and direct it to the Base URL
        driver.get(baseUrl);

        // get the actual value of the title
        actualTitle = driver.getTitle();
        
        
        /*
         * compare the actual title of the page with the expected one and print
         * the result as "Passed" or "Failed"
         */
        if (actualTitle.contentEquals(expectedTitle)){
            System.out.println("Test Passed!");
        } else {
            System.out.println("Test Failed");
            System.out.println(actualTitle);
        }
        /*
         * search for a github page and explore the images
         */
        driver.get("https://www.google.com/search?q=rohit+shakya&oq=rohit+shakya&aqs=chrome..69i57j46j0j46j0l2j0i22i30l2.4281j0j15&sourceid=chrome&ie=UTF-8");
        driver.findElement(By.linkText("Images")).click();
        driver.findElement(By.xpath("//img[@alt='rohitshakya (Rohit Shakya) · GitHub']")).click();
      
        Thread.sleep(1000);
        //close chrome
        driver.close();

}}
////code should be like this, and import all the webdriver and chrome drivers, add on is move the jar files from module path to class path in configure build path.