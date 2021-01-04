package testng;

import java.util.concurrent.TimeUnit;
import org.testng.annotations.*;
import java.io.File;  // Import the File class
import java.io.IOException;  // Import the IOException class to handle errors

import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.Iterator;
import java.util.List;


public class brokenImages {
	private WebDriver driver;
	private String baseUrl;
	private boolean acceptNextAlert = true;
	private StringBuffer verificationErrors = new StringBuffer();


	@BeforeClass(alwaysRun = true)
	public void setUp() throws Exception {
		System.setProperty("webdriver.chrome.driver","C:\\selenium\\selenium-java-3.141.59\\chromedriver_win32\\chromedriver.exe");
		driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
		baseUrl = "https://volt.development.vivadevops.com/\"";
		driver.manage().timeouts().pageLoadTimeout(40, TimeUnit.SECONDS);
		driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
	}

	@Test
	public void testCase1() throws Exception {

		driver.get(baseUrl);
		driver.findElement(By.linkText("Sign In")).click();
		driver.findElement(By.id("Userid")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=Userid | ]]
		driver.findElement(By.id("Userid")).clear();
		driver.findElement(By.id("Userid")).sendKeys("a0001");
		Thread.sleep(5000);
		driver.findElement(By.name("accountpassword")).clear();
		driver.findElement(By.name("accountpassword")).sendKeys("Abcd@1234");
		Thread.sleep(5000);
		driver.findElement(By.name("login")).click();
		Thread.sleep(5000);
		System.out.println("Successfulyy Passed login test");

		List<WebElement> links = driver.findElements(By.tagName("a"));
		Iterator<WebElement> it = links.iterator();
		List<WebElement> images = driver.findElements(By.tagName("img"));
		System.out.println("Total number of Images on the Page are " + images.size());


		//checking the links fetched.
		for(int index=0;index<images.size();index++)
		{
			WebElement image= images.get(index);
			String imageURL= image.getAttribute("src");
			System.out.println("URL of Image " + (index+1) + " is: " + imageURL);
			verifyLinks(imageURL);

			//Validate image display using JavaScript executor
			try {
				boolean imageDisplayed = (Boolean) ((JavascriptExecutor) driver).executeScript("return (typeof arguments[0].naturalWidth !=\"undefined\" && arguments[0].naturalWidth > 0);", image);
				if (imageDisplayed) {
					System.out.println("DISPLAY - OK");
				}else {
					System.out.println("DISPLAY - BROKEN");
				}
			} 
			catch (Exception e) {
				System.out.println("Error Occured");
			}
		}
		driver.close();
		driver.quit();
	}	

	public static void verifyLinks(String linkUrl)
	{
		try
		{
			URL url = new URL(linkUrl);

			//Now we will be creating url connection and getting the response code
			HttpURLConnection httpURLConnect=(HttpURLConnection)url.openConnection();
			httpURLConnect.setConnectTimeout(5000);
			httpURLConnect.connect();
			if(httpURLConnect.getResponseCode()>=400)
			{
				System.out.println("HTTP STATUS - " + httpURLConnect.getResponseMessage() + "is a broken link");
			}    

			//Fetching and Printing the response code obtained
			else{
				System.out.println("HTTP STATUS - " + httpURLConnect.getResponseMessage());
			}
		}catch (Exception e) {
		}
	}



	@AfterClass(alwaysRun = true)
	public void tearDown() throws Exception {
		driver.quit();
		String verificationErrorString = verificationErrors.toString();
		if (!"".equals(verificationErrorString)) {
			fail(verificationErrorString);
		}
	}

	private boolean isElementPresent(By by) {
		try {
			driver.findElement(by);
			return true;
		} catch (NoSuchElementException e) {
			return false;
		}
	}

	private boolean isAlertPresent() {
		try {
			driver.switchTo().alert();
			return true;
		} catch (NoAlertPresentException e) {
			return false;
		}
	}

	private String closeAlertAndGetItsText() {
		try {
			Alert alert = driver.switchTo().alert();
			String alertText = alert.getText();
			if (acceptNextAlert) {
				alert.accept();
			} else {
				alert.dismiss();
			}
			return alertText;
		} finally {
			acceptNextAlert = true;
		}
	}
}

