package testng;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.testng.annotations.*;
import static org.testng.Assert.*;
import org.openqa.selenium.*;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

public class test2 {
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
  public void testCase2() throws Exception {
    driver.get("https://vivadigital.in/");
    driver.findElement(By.linkText("Home")).click();
    // ERROR: Caught exception [unknown command [editContent]]
    driver.findElement(By.xpath("//a[@id='scrollUp']/i")).click();
    driver.findElement(By.xpath("//a[@id='scrollUp']/i")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //a[@id='scrollUp']/i | ]]
    driver.findElement(By.xpath("//div[3]")).click();
    driver.findElement(By.xpath("//div[3]")).click();
    driver.findElement(By.xpath("//div[3]")).click();
    driver.findElement(By.xpath("(//img[@alt='Viva User Login'])[2]")).click();
    driver.findElement(By.xpath("//img[@alt='Viva User Login']")).click();
    driver.findElement(By.xpath("//img[@alt='Viva User Login']")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //img[@alt='Viva User Login'] | ]]
    driver.findElement(By.linkText("Sales CRM")).click();
    driver.findElement(By.id("name")).click();
    driver.findElement(By.id("name")).clear();
    driver.findElement(By.id("name")).sendKeys("roheidi");
    driver.findElement(By.id("password")).clear();
    driver.findElement(By.id("password")).sendKeys("ksandxksnxnk");
    driver.findElement(By.id("loginsubmit")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //form[@id='login']/div[2]/div[5]/div | ]]
    driver.findElement(By.xpath("//form[@id='login']/div[2]/div/i")).click();
    driver.findElement(By.xpath("//form[@id='login']/div[2]/div[2]/i")).click();
    driver.findElement(By.xpath("//form[@id='login']/div/div/a")).click();
    driver.findElement(By.linkText("Forgot password?")).click();
    // ERROR: Caught exception [unknown command [editContent]]
    driver.findElement(By.xpath("//form[@id='forgot']/div/a/i")).click();
    driver.findElement(By.id("forgotpass")).click();
    driver.findElement(By.id("email")).click();
    driver.findElement(By.id("email")).clear();
    driver.findElement(By.id("email")).sendKeys("roehfiehdckn");
    driver.findElement(By.xpath("//button[@id='forgotpass']/i")).click();
    driver.findElement(By.xpath("//form[@id='forgot']/div[2]/div[4]/div")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //form[@id='forgot']/div[2]/div[4]/div | ]]
    driver.findElement(By.id("email")).click();
    driver.findElement(By.id("email")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=email | ]]
    driver.findElement(By.id("email")).clear();
    driver.findElement(By.id("email")).sendKeys("rohit.rkshakya@gmail.com");
    driver.findElement(By.xpath("//form[@id='forgot']/div[2]")).click();
    driver.findElement(By.xpath("//form[@id='forgot']/div[2]")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | //form[@id='forgot']/div[2] | ]]
    driver.findElement(By.id("forgotpass")).click();
    driver.findElement(By.xpath("//img[@alt='Viva Facebook Page']")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_1 | ]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_local | ]]
    driver.findElement(By.xpath("//img[@alt='Viva Twitter Page']")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_2 | ]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_local | ]]
    driver.findElement(By.xpath("//img[@alt='Viva Linkedin Page']")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_3 | ]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_local | ]]
    driver.findElement(By.xpath("//img[@alt='Viva Youtube Page']")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_4 | ]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_local | ]]
    driver.findElement(By.xpath("//img[@alt='Viva Instagram Page']")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_5 | ]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_4 | ]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_local | ]]
    driver.findElement(By.xpath("//img[@alt='Viva Pinterest Page']")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_6 | ]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_local | ]]
    driver.findElement(By.xpath("(//img[@alt='Viva Pinterest Page'])[2]")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_7 | ]]
    driver.findElement(By.name("email")).click();
    driver.findElement(By.name("email")).clear();
    driver.findElement(By.name("email")).sendKeys("djnfjknkjdnknsjkxcnsjk");
    driver.findElement(By.name("loginSubmit")).click();
    // ERROR: Caught exception [unknown command [editContent]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_local | ]]
    driver.findElement(By.linkText("Register as new account")).click();
    driver.findElement(By.linkText("Register as new account")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=Register as new account | ]]
    driver.findElement(By.id("acctype")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=acctype | ]]
    driver.findElement(By.id("acctype")).click();
    new Select(driver.findElement(By.id("acctype"))).selectByVisibleText("Teacher");
    driver.findElement(By.id("acctype")).click();
    driver.findElement(By.id("acctype")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=acctype | ]]
    driver.findElement(By.id("acctype")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=acctype | ]]
    driver.findElement(By.id("acctype")).click();
    driver.findElement(By.id("acctype")).click();
    driver.findElement(By.id("acctype")).click();
    new Select(driver.findElement(By.id("acctype"))).selectByVisibleText("Institute");
    driver.findElement(By.id("acctype")).click();
    driver.findElement(By.id("acctype")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=acctype | ]]
    driver.findElement(By.id("acctype")).click();
    driver.findElement(By.id("acctype")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=acctype | ]]
    driver.findElement(By.id("acctype")).click();
    new Select(driver.findElement(By.id("acctype"))).selectByVisibleText("Parent");
    driver.findElement(By.id("acctype")).click();
    driver.findElement(By.id("name")).click();
    driver.findElement(By.id("name")).clear();
    driver.findElement(By.id("name")).sendKeys("c mkc kqdk");
    driver.findElement(By.id("email")).clear();
    driver.findElement(By.id("email")).sendKeys("skcmsdm");
    driver.findElement(By.id("cemail")).clear();
    driver.findElement(By.id("cemail")).sendKeys("dlvmdm,c");
    driver.findElement(By.id("phone")).click();
    driver.findElement(By.id("phone")).clear();
    driver.findElement(By.id("phone")).sendKeys("9874125512");
    driver.findElement(By.id("password")).click();
    driver.findElement(By.id("password")).clear();
    driver.findElement(By.id("password")).sendKeys("c xc");
    driver.findElement(By.id("cpass")).click();
    driver.findElement(By.id("cpass")).clear();
    driver.findElement(By.id("cpass")).sendKeys("dcsc");
    driver.findElement(By.id("state")).click();
    new Select(driver.findElement(By.id("state"))).selectByVisibleText("Kerala");
    driver.findElement(By.id("state")).click();
    driver.findElement(By.id("city")).click();
    driver.findElement(By.id("saddress")).click();
    driver.findElement(By.id("saddress")).clear();
    driver.findElement(By.id("saddress")).sendKeys("dfc");
    driver.findElement(By.id("sboard")).click();
    driver.findElement(By.id("city")).click();
    driver.findElement(By.id("city")).click();
    driver.findElement(By.id("city")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | id=city | ]]
    new Select(driver.findElement(By.id("city"))).selectByVisibleText("Aluva");
    driver.findElement(By.id("city")).click();
    driver.findElement(By.id("state")).click();
    new Select(driver.findElement(By.id("state"))).selectByVisibleText("Dadra and Nagar Haveli");
    driver.findElement(By.linkText("Media")).click();
    driver.findElement(By.linkText("Media")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=Media | ]]
    driver.findElement(By.linkText("About Us")).click();
    driver.findElement(By.linkText("Contact Us")).click();
    driver.findElement(By.linkText("Contact Us")).click();
    // ERROR: Caught exception [ERROR: Unsupported command [doubleClick | link=Contact Us | ]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_8 | ]]
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_local | ]]
    driver.close();
    // ERROR: Caught exception [ERROR: Unsupported command [selectWindow | win_ser_8 | ]]
    
    System.out.println("test passed");
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
