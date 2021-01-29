package suite5master;

import static org.testng.Assert.fail;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.Select;
import org.testng.annotations.AfterClass;
import org.testng.annotations.BeforeClass;
import org.testng.annotations.Test;

public class themeManualScript {
	private WebDriver driver;
	private StringBuffer verificationErrors = new StringBuffer();

	@BeforeClass(alwaysRun = true)
	public void setUp() throws Exception {
		System.setProperty("webdriver.chrome.driver","C:\\selenium\\selenium-java-3.141.59\\chromedriver_win32\\chromedriver.exe");

		driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
		driver.manage().timeouts().pageLoadTimeout(40, TimeUnit.SECONDS);
		driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
	}

	@Test
	public void testUntitledTestCase() throws Exception {
		String baseUrl = "https://master.volt.development.vivadevops.com/";
		driver.get(baseUrl);
		driver.findElement(By.name("email")).click();
		driver.findElement(By.name("email")).clear();
		driver.findElement(By.name("email")).sendKeys("rohit.shakya@vivavolt.net");
		driver.findElement(By.name("password")).clear();
		driver.findElement(By.name("password")).sendKeys("Volt@0202");
		driver.findElement(By.name("password")).sendKeys(Keys.ENTER);
		driver.get("https://master.volt.development.vivadevops.com/master/courseadd");
		new Select(driver.findElement(By.id("changeCls"))).selectByVisibleText("Class 1");
		new Select(driver.findElement(By.id("getsubject"))).selectByVisibleText("G.K");
		new Select(driver.findElement(By.id("setmodule"))).selectByVisibleText("MODULE Test");
		driver.findElement(By.id("ctitle")).click();
		driver.findElement(By.id("ctitle")).clear();
		driver.findElement(By.id("ctitle")).sendKeys("thememytest");
		driver.findElement(By.xpath("//button[@type='submit']")).click();
		System.out.println("theme created successfully");
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
