const express = require("express");
const router = express.Router();
const braintree = require("braintree");

router.post("/", (req, res, next) => {
    const gateway = new braintree.BraintreeGateway({
        environment: braintree.Environment.Sandbox,
        // Use your own credentials from the sandbox Control Panel here
        merchantId: "3928pc3krb84swd8",
        publicKey: "kv8cv2x6j45gmnw9",
        privateKey: "3af3bb352ecedf87038faf05f13f6c21",
    });

    // Use the payment method nonce here
    const nonceFromTheClient = req.body.paymentMethodNonce;
    // Create a new transaction for $10
    const newTransaction = gateway.transaction.sale(
        {
            amount: "15.00",
            paymentMethodNonce: nonceFromTheClient,
            options: {
                // This option requests the funds from the transaction
                // once it has been authorized successfully
                submitForSettlement: true,
            },
        },
        (error, result) => {
            if (result) {
                res.send(result);
            } else {
                res.status(500).send(error);
            }
        }
    );
});

module.exports = router;
