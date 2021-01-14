package suite1;

import java.util.concurrent.TimeUnit;
import org.testng.annotations.*;

import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;

public class loginChecker {
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
		if(isElementPresent(By.linkText("Sign In")))
		{

			System.out.println(driver.findElement(By.linkText("Sign In")).isDisplayed());
			driver.findElement(By.linkText("Sign In")).click();
			if(isElementPresent(By.id("Userid")))
			{
				driver.findElement(By.id("Userid")).clear();
				driver.findElement(By.id("Userid")).sendKeys("a0001");
				driver.manage().timeouts().implicitlyWait(3, TimeUnit.SECONDS);
			}
			else
			{
				System.out.println("not found userid");
			}
			if(isElementPresent(By.name("accountpassword")))
			{
				driver.findElement(By.name("accountpassword")).clear();
				driver.findElement(By.name("accountpassword")).sendKeys("Abcd@1234");
				driver.manage().timeouts().implicitlyWait(3, TimeUnit.SECONDS);	
			}
			else
			{
				System.out.println("not found password");
			}
			// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=Userid | ]]
			if(isElementPresent(By.name("login")))
			{
				driver.findElement(By.name("login")).click();
				System.out.println("Successfulyy Passed login test");
				//logout checker
				if(isElementPresent(By.id("dd")))
				{
					driver.findElement(By.id("dd")).click();
					driver.findElement(By.id("dd")).click();
					System.out.println("Successfulyy Passed login logout test");
				}

			}
			else
			{
				System.out.println("Not logged in succesfully");
			}
		}
		else
		{
			System.out.println("Not found sign in button");
		}
		driver.close();
		driver.quit();
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
