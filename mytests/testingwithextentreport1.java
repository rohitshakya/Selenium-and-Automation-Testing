package testng;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.testng.annotations.*;

import com.relevantcodes.extentreports.ExtentReports;
import com.relevantcodes.extentreports.ExtentTest;
import com.relevantcodes.extentreports.LogStatus;

import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.Select;

public class testingwithextentreport1 {
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
		Thread.sleep(10000);
		System.out.println("Successfulyy Passed login test");
		// ERROR: Caught exception [unknown command [editContent]]
		driver.findElement(By.id("dd")).click();
		driver.findElement(By.xpath("//div[@id='dd']/ul/li[3]/a/div")).click();
		driver.findElement(By.id("dd")).click();
		System.out.println("Successfulyy Passed login test");
		driver.findElement(By.xpath("//img[@alt='Viva Volt']")).click();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div/div/span")).click();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div[3]/div/span")).click();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div[2]/div/span")).click();
		driver.findElement(By.id("cars")).click();
		System.out.println("Successfulyy Passed login test");
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div[2]/div")).click();
		driver.findElement(By.id("dd")).click();
		driver.findElement(By.xpath("//div[@id='dd']/ul/li[4]/a/div")).click();
		// ERROR: Caught exception [unknown command [editContent]]
		ExtentReports reports = new ExtentReports("C:\\Users\\editor\\eclipse-workspace\\s2\\bin", true);

		ExtentTest test = reports.startTest("TestName");
		
		test.log(LogStatus.PASS,"Test Passed");
		test.log(LogStatus.FAIL,"Test Failed");
		test.log(LogStatus.SKIP,"Test Skipped");
		test.log(LogStatus.INFO,"Test Info");

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
