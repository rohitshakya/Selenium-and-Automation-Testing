package testng;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.testng.annotations.*;
import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class VivaDigitalTest1 {
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
		baseUrl = "https://www.google.com/";
		driver.manage().timeouts().implicitlyWait(30, TimeUnit.SECONDS);
	}

	@Test
	public void testCase1() throws Exception {

		driver.get("https://vivadigital.in/");
		driver.findElement(By.id("books_name")).click();
		driver.findElement(By.id("books_name")).clear();
		driver.findElement(By.id("books_name")).sendKeys("hello rohit");
		driver.findElement(By.id("books_name")).sendKeys(Keys.ENTER);
		driver.findElement(By.linkText("PRESCHOOL")).click();
		driver.findElement(By.linkText("ENGLISH")).click();
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i | ]]
		driver.findElement(By.linkText("MATHEMATICS")).click();
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		// ERROR: Caught exception [unknown command [editContent]]
		driver.findElement(By.linkText("SCIENCE")).click();
		driver.findElement(By.linkText("Subjects")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=Subjects | ]]
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i | ]]
		driver.findElement(By.xpath("//h2")).click();
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		driver.findElement(By.linkText("SOCIAL STUDIES")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=SOCIAL STUDIES | ]]
		driver.findElement(By.xpath("//div[@id='header-sticky']/div/div/div/div/nav/ul/li[2]/a/i")).click();
		driver.findElement(By.linkText("ENVIRONMENTAL STUDIES")).click();
		driver.findElement(By.linkText("Subjects")).click();
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
		driver.findElement(By.linkText("VALUE EDUCATION")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=VALUE EDUCATION | ]]
		driver.findElement(By.id("bookdetail")).click();
		driver.findElement(By.id("bookdetail")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=bookdetail | ]]
		driver.findElement(By.id("bookdetail")).click();
		new Select(driver.findElement(By.id("bookdetail"))).selectByVisibleText("Value Education 5");
		driver.findElement(By.id("bookdetail")).click();
		driver.findElement(By.xpath("//div/div[3]/div")).click();
		driver.findElement(By.linkText("Sign In")).click();
		driver.findElement(By.id("Userid")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=Userid | ]]
		driver.findElement(By.id("Userid")).clear();
		driver.findElement(By.id("Userid")).sendKeys("a0001");
		driver.findElement(By.name("accountpassword")).clear();
		driver.findElement(By.name("accountpassword")).sendKeys("Abcd@1234");
		driver.findElement(By.id("publicloginform")).submit();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div/div/span")).click();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div/span")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='admission']/div/div[2]/div/div[3]/div/span | ]]
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div/div/span")).click();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div[3]/div/span")).click();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div[3]/div/span")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='admission']/div/div[2]/div/div[3]/div[3]/div/span | ]]
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div[2]/div/span")).click();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[3]/div[2]/div/span")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='admission']/div/div[2]/div/div[3]/div[2]/div/span | ]]
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[2]/div/div/div/label/span")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='admission']/div/div[2]/div/div[2]/div/div/div/label/span | ]]
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[2]/div/div/div/label/span")).click();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[2]/div/div/div/label/span")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='admission']/div/div[2]/div/div[2]/div/div/div/label/span | ]]
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[2]/div/div/div/label/span")).click();
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[2]/div/div/div/label/span")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='admission']/div/div[2]/div/div[2]/div/div/div/label/span | ]]
		driver.findElement(By.xpath("//div[@id='admission']/div/div[2]/div/div[2]/div/div/div/label/span")).click();
		driver.findElement(By.id("cars")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=cars | ]]
		driver.findElement(By.id("cars")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=cars | ]]
		driver.findElement(By.id("cars")).click();
		driver.findElement(By.id("cars")).click();
		driver.findElement(By.id("dd")).click();
		driver.findElement(By.xpath("//div[@id='dd']/ul/li/a/div")).click();
		driver.findElement(By.id("dd")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=dd | ]]
		driver.findElement(By.id("dd")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=dd | ]]
		driver.findElement(By.id("dd")).click();
		driver.findElement(By.xpath("//div[@id='dd']/ul/li[2]/a")).click();
		// ERROR: Caught exception [unknown command [editContent]]
		driver.findElement(By.id("dd")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=dd | ]]
		driver.findElement(By.id("dd")).click();
		driver.findElement(By.xpath("//div[@id='dd']/ul/li[3]/a/div")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //div[@id='admission']/div/div/div/div/div/h3 | ]]
		driver.findElement(By.id("dd")).click();
		driver.findElement(By.xpath("//div[@id='dd']/ul/li/a/div")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //h2 | ]]
		driver.findElement(By.linkText("Profile")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=Profile | ]]
		driver.findElement(By.xpath("//a[contains(text(),'Dashboard')]")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //a[contains(text(),'Dashboard')] | ]]
		driver.findElement(By.xpath("//div/div[3]/div")).click();
		driver.findElement(By.id("dd")).click();
		driver.findElement(By.xpath("//div[@id='dd']/ul/li[4]/a/div")).click();
		driver.findElement(By.id("admission")).click();
		// ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=admission | ]]
		// ERROR: Caught exception [unknown command [editContent]]

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
