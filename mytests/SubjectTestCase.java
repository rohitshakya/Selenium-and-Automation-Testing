package testng;

import org.testng.annotations.*;
import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.support.ui.Select;

public class SubjectTestCase {
	private WebDriver driver;
	private boolean acceptNextAlert = true;
	private StringBuffer verificationErrors = new StringBuffer();


	@BeforeClass(alwaysRun = true)
	public void setUp() throws Exception {
		System.setProperty("webdriver.chrome.driver","C:\\selenium\\selenium-java-3.141.59\\chromedriver_win32\\chromedriver.exe");
		driver = new ChromeDriver();
		driver.manage().window().maximize();
		driver.manage().deleteAllCookies();
	}

	@Test
	public void testCase1() throws Exception {
		driver.get("https://vivadigital.in/");
		driver.findElement(By.id("books_name")).click();
		driver.findElement(By.id("books_name")).clear();
		driver.findElement(By.id("books_name")).sendKeys("hello rohit");
		driver.findElement(By.id("books_name")).sendKeys(Keys.ENTER);
		Thread.sleep(10000);
		driver.findElement(By.linkText("PRESCHOOL")).click();
		Thread.sleep(10000);
		driver.findElement(By.linkText("ENGLISH")).click();
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i | ]]
		driver.findElement(By.linkText("MATHEMATICS")).click();
		Thread.sleep(10000);
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		// ERROR: Caught exception [unknown command [editContent]]
		driver.findElement(By.linkText("SCIENCE")).click();
		driver.findElement(By.linkText("Subjects")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=Subjects | ]]
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i | ]]
		driver.findElement(By.xpath("//h2")).click();
		Thread.sleep(10000);
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		driver.findElement(By.linkText("SOCIAL STUDIES")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=SOCIAL STUDIES | ]]
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		driver.findElement(By.linkText("ENVIRONMENTAL STUDIES")).click();
		driver.findElement(By.linkText("Subjects")).click();
		Thread.sleep(10000);
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=Subjects | ]]
		driver.findElement(By.linkText("COMPUTER SCIENCE")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=COMPUTER SCIENCE | ]]
		driver.findElement(By.linkText("COMPUTER SCIENCE")).click();
		driver.findElement(By.linkText("HINDI")).click();
		driver.findElement(By.linkText("SANSKRIT")).click();
		driver.findElement(By.id("bookdetail")).click();
		driver.findElement(By.xpath("(//select[@id='bookdetail'])[2]")).click();
		driver.findElement(By.xpath("//div[2]/div/div/div/div")).click();
		driver.findElement(By.linkText("GENERAL APTITUDE")).click();
		driver.findElement(By.id("bookdetail")).click();
		Thread.sleep(10000);
		driver.findElement(By.linkText("VALUE EDUCATION")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=VALUE EDUCATION | ]]
		driver.findElement(By.id("bookdetail")).click();
		driver.findElement(By.id("bookdetail")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=bookdetail | ]]
		driver.findElement(By.id("bookdetail")).click();
		new Select(driver.findElement(By.id("bookdetail"))).selectByVisibleText("Value Education 5");
		driver.findElement(By.id("bookdetail")).click();
		Thread.sleep(10000);
		System.out.println("passed");
		driver.close();
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
