package Suite2;

import static org.testng.Assert.fail;

import java.util.concurrent.TimeUnit;

import org.openqa.selenium.Alert;
import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.NoAlertPresentException;
import org.openqa.selenium.NoSuchElementException;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.Select;
import org.testng.annotations.AfterClass;
import org.testng.annotations.BeforeClass;
import org.testng.annotations.Test;

public class SchoolManual {
	private WebDriver driver;
	private boolean acceptNextAlert = true;
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
		//LOGIN SCRIPT
		driver.get("https://volt.development.vivadevops.com/master");
		driver.findElement(By.name("email")).click();
		driver.findElement(By.name("email")).clear();
		driver.findElement(By.name("email")).sendKeys("rohit.shakya@vivavolt.net");
		driver.findElement(By.name("password")).clear();
		driver.findElement(By.name("password")).sendKeys("Volt@0202");
		driver.findElement(By.name("password")).sendKeys(Keys.ENTER);
		//MAIN SCRIPT START
		driver.get("https://volt.development.vivadevops.com/master/admin/courselist");
		driver.findElement(By.xpath("//li[12]/a/p")).click();
		driver.findElement(By.xpath("//a/h4")).click();
		driver.findElement(By.xpath("//form[@id='createform']/div/div/div[2]/div/div/div/div/button/span")).click();
		driver.findElement(By.xpath("//form[@id='createform']/div/div/div[2]/div/div/div/div/button/span[2]/span")).click();
		driver.findElement(By.xpath("//form[@id='createform']/div/div/div[2]/div/div/div/div/div/ul/li[2]/a")).click();
		new Select(driver.findElement(By.id("stateIs"))).selectByVisibleText("ANDAMAN & NICOBAR");
		driver.findElement(By.xpath("//form[@id='createform']/div/div/div[2]/div/div[2]/div/div/button/span")).click();
		new Select(driver.findElement(By.id("getcities"))).selectByVisibleText("North and Middle Andaman");
		driver.findElement(By.name("title")).click();
		driver.findElement(By.name("title")).clear();
		driver.findElement(By.name("title")).sendKeys("ABCD PUBLIC SCHOOL"); //school name
		driver.findElement(By.id("termstart")).click();
		driver.findElement(By.id("termstart")).clear();
		driver.findElement(By.id("termstart")).sendKeys("2014-10-17"); //term start date
		driver.findElement(By.id("class-1")).click();
		driver.findElement(By.xpath("//form[@id='createform']/div/div/div[2]/div[3]/div/div")).click();
		new Select(driver.findElement(By.id("class-1"))).selectByVisibleText("Class 2");
		driver.findElement(By.id("add")).click();
		driver.findElement(By.id("sub_19")).click();
		driver.findElement(By.name("submit")).click();
		System.out.println("School created successfully");
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
