
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.*;

public class Main {
    public static void main(String[] args) {
                ChromeDriver driver = new ChromeDriver();

        try {
            driver.get("file:///D:/LABS/DEVOPS/SEL/index.html");

            WebElement button = driver.findElement(By.tagName("button"));
            button.click();

            driver.switchTo().alert().accept();

            System.out.println("Test passed!");

        } catch (Exception e) {
//            e.printStackTrace();
            System.out.println("Test failed!");
        } finally {
            // Close the browser
            driver.quit();
        }
    }
}