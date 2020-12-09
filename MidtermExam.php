<!DOCTYPE php>

<html>
        <form action="process.php" method="get">
            <div class="form">
                <label for="Cname">Customer Name</label>
                <input type="text" id="Cname" name="Cname" /><br />

                <label for="msrp">MSRP/List Proce</label>
                <input type="text" id="msrp" name="msrp" /><br />

                <label for="downpayment">Downpayment</label>
                <input type="text" id="downpayment" name="downpayment" /><br />

                <label for="discount">Discount</label>
                <select id="discount" name="discount">
                    <option value="none">None</option>
                    <option value="AAA">AAA Member</option>
                    <option value="student">College Student</option>
                    <option value="military">Military</option>
                </select><br />

                <label  for="businessaccount">Business Account</label>
                <input  type="checkbox" id="businessaccount" name="businessaccount" value="business account">

                <input type="submit" value="Submit Order">

            </div>
        </form>
</html>