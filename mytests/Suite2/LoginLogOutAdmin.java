package Suite2;

import java.util.concurrent.TimeUnit;
import org.testng.annotations.*;

import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;

public class LoginLogOutAdmin {
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
		baseUrl = "https://volt.development.vivadevops.com/master";
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
	@Test
	public void Testcase3() throws Exception {

		if(isElementPresent(By.xpath("/html[1]/body[1]")))
		{

			System.out.println(driver.findElement(By.xpath("/html[1]/body[1]/div[1]/div[1]/div[1]/ul[1]/li[13]/a[1]")).isDisplayed());
			driver.findElement(By.xpath("/html[1]/body[1]")).click(); //logout
			System.out.println("LogOut Check");
		}
	}

	@AfterClass(alwaysRun = true)
	public void tearDown() throws Exception {
		driver.close();
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
