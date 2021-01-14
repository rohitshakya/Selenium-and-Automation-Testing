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

public class createUserManualScript {
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
		driver.get("https://volt.development.vivadevops.com/master");
		driver.findElement(By.name("email")).click();
		driver.findElement(By.name("email")).clear();
		driver.findElement(By.name("email")).sendKeys("rohit.shakya@vivavolt.net");
		driver.findElement(By.name("password")).clear();
		driver.findElement(By.name("password")).sendKeys("Volt@0202");
		driver.findElement(By.name("password")).sendKeys(Keys.ENTER);
		driver.findElement(By.xpath("//li[13]/a/p")).click();
		driver.findElement(By.xpath("//a/h4")).click();
		driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div/div/div/div/button/span")).click();
		driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div/div/div/div/div/ul/li[3]/a")).click();
		new Select(driver.findElement(By.id("stateIs"))).selectByVisibleText("DELHI"); //Select State here
		driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div/div[2]/div/div/button/span")).click();
		new Select(driver.findElement(By.id("getcities"))).selectByVisibleText("South Delhi"); //Select Zone
		driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div/div[3]/div/div/button/span")).click();
		new Select(driver.findElement(By.id("getschool"))).selectByVisibleText("DPS PUBLIC SCHOOL"); //Select School
		driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div[2]/div/div/div/button/span")).click();
		driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div[2]/div/div/div/div/ul/li[7]/a")).click();
		new Select(driver.findElement(By.id("classlist"))).selectByVisibleText("Class 8"); //Select Class
		new Select(driver.findElement(By.id("sectionclass"))).selectByVisibleText("B"); //Select Section
		driver.findElement(By.name("name")).click();
		driver.findElement(By.name("name")).clear();
		driver.findElement(By.name("name")).sendKeys("Kajal"); //Select First Name
		driver.findElement(By.name("lastname")).clear();
		driver.findElement(By.name("lastname")).sendKeys("Sharma"); //Select Last Name
		driver.findElement(By.name("emailid")).click();
		driver.findElement(By.name("emailid")).clear();
		driver.findElement(By.name("emailid")).sendKeys("A@gmail.com"); //Select Email
		driver.findElement(By.name("number")).click();
		driver.findElement(By.name("number")).clear();
		driver.findElement(By.name("number")).sendKeys("1223124412"); //Select Phone Number
		driver.findElement(By.id("newpassword")).click();
		driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div[2]/div[7]/div/a/i")).click();
		driver.findElement(By.name("studentid")).click();
		driver.findElement(By.name("studentid")).clear();
		driver.findElement(By.name("studentid")).sendKeys("1356"); //Select ID
		driver.findElement(By.xpath("//form[@id='adduser']/div/div/div[2]/div[3]/div/div/div/button/span")).click();
		driver.findElement(By.name("dob")).click();
		driver.findElement(By.name("dob")).clear();
		driver.findElement(By.name("dob")).sendKeys("1996-03-03"); //Select DOB
		driver.findElement(By.name("dob")).sendKeys(Keys.TAB);
		driver.findElement(By.name("dob")).sendKeys(Keys.TAB,Keys.TAB,Keys.ENTER);
		//driver.findElement(By.xpath("//button[@type='submit']")).click();
		System.out.println("User created successfully");
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
