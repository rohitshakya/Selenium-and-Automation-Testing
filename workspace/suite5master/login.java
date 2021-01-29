package suite5master;

import java.util.concurrent.TimeUnit;
import org.testng.annotations.*;


import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;


public class login {
	private WebDriver driver;
	private String baseUrl;
	private StringBuffer verificationErrors = new StringBuffer();


	@BeforeClass(alwaysRun = true)
	public void setUp() throws Exception {
		System.setProperty("webdriver.chrome.driver","C:\\selenium\\selenium-java-3.141.59\\chromedriver_win32\\chromedriver.exe");
		driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
		baseUrl = "https://master.volt.development.vivadevops.com/";
		driver.manage().timeouts().pageLoadTimeout(40, TimeUnit.SECONDS);
		driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
	}

	@Test
	public void LoginAdmin() throws Exception {
		driver.get(baseUrl);
		if(isElementPresent(By.name("email")))
		{

			System.out.println(driver.findElement(By.name("email")).isDisplayed());
			driver.findElement(By.name("email")).click();
			if(isElementPresent(By.name("email")))
			{
				driver.findElement(By.name("email")).clear();
				driver.findElement(By.name("email")).sendKeys("rohit.shakya@vivavolt.net");
				//driver.manage().timeouts().implicitlyWait(3, TimeUnit.SECONDS);
			}
			else
			{
				System.out.println("not found userid");
			}
			if(isElementPresent(By.name("password")))
			{
				driver.findElement(By.name("password")).clear();
				driver.findElement(By.name("password")).sendKeys("Volt@0202");
				//driver.manage().timeouts().implicitlyWait(3, TimeUnit.SECONDS);	
			}
			else
			{
				System.out.println("not found password");
			}
			// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=Userid | ]]
			if(isElementPresent(By.name("loginSubmit")))
			{
				driver.findElement(By.name("loginSubmit")).click();
				System.out.println("Successfulyy Passed login test");
			}
		}
		
	}
	private boolean isElementPresent(By name) {
		// TODO Auto-generated method stub
		return false;
	}

	@AfterClass(alwaysRun = true)
	public void tearDown() throws Exception {
		driver.quit();
		String verificationErrorString = verificationErrors.toString();
		if (!"".equals(verificationErrorString)) {
			fail(verificationErrorString);
		}
	}
}
