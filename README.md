# WHMCS as Fast as Possible

It's much easier to understand what is WHMCS making a parallelism with WordPress. Of the many free CMS, WordPress is the best and most popular solution to start a blog. WHMCS is the same in its reference market. It's the way go to [start an hosting business](https://katamaze.com/blog/38/starting-a-domain-and-hosting-company-in-2020) for **providers, web agencies and IT professionals**.

Both systems are the undisputed market leaders in their respective field. WordPress reaches 60% of market share. WHMCS attracts about 50.000 customers worldwide. They are both flexible and can accommodate several  businesses needs. In them there's more than a control panel and a blogging platform.

That said, similarities end here. WordPress is free, open source and good at many things. WHMCS kicks off at [15.95 $ per month](https://www.whmcs.com/pricing/). Source code is obfuscated and even if it is a solid platform, there are [some shortcomings](https://katamaze.com/blog/41/my-wishlist-for-whmcs-v8).

Continue reading our [beginners guide to WHMCS](https://katamaze.com/blog/23/what-is-whmcs-and-when-to-use-it-explained-for-beginners) for more details.

# Not so fast...

Before we can start talking about electronic invoicing, first we have to put the spotlight on flaws and limits of WHMCS. It would probably take too long so for simplicity reasons we'll just focus on the "numbers" of [Billing Extension](https://katamaze.com/whmcs/billing-extension/specifications).

It was **2014** when we launched Billing Extension, a module created to address the billing lacks of WHMCS. At the moment of writing, we released **212 updates** as we keep implementing new concepts. That's a lot of work that never ends.

Hopefully this give you an idea of how a standard installation of WHMCS is incapable of providing any solution whatsoever for e-invoicing. That said, the first requirement is that you have a copy of Billing Extension installed on your WHMCS.

# Electronic Invoicing

Electronic invoicing is spreading around the world and is quickly becoming mandatory in many countries. If you're from **Italy** or **Slovenia** the good news is that Billing Extension already integrates e-invoicing for both countries.

As time goes by, we received a lot of requests from people around the world. They all wanted us to integrate WHMCS & Billing Extension basically with e-invoicing of ANY country of the world. Even though we would like to integrate all countries, this is prohibitive. Let us put it into perspective. It took 4 months to complete the integration with Italy. We simply cannot repeat the same process tens of times. It would take years.

Instead of leaving non-Italian and non-Slovenian customers alone dealing with electronic invoicing, we came up with the idea of including a web service in Billing Extension that provides all data you might need to integrate WHMCS with e-invoicing of any country.

We underline that even if you don't need to comply to e-invoicing regulations, you can use the web service also for different purposes. For example you could use it to integrate WHMCS with any accounting software or intranet. Below you can see an example of data 

```
{
  "1999": {
    "ClientData": {
      "UserID": "76",
      "Firstname": "Lily",
      "Lastname": "Marquez",
      "ClientName": "Lily Marquez",
      "CompanyName": "Dragon Ltd.",
      "Email": "null@example.com",
      "Address1": "Via Roma, 138",
      "Address2": "",
      "City": "Pescara",
      "State": "",
      "PostCode": "65122",
      "Country": "IT",
      "PhoneNumber": "+39.828159141",
      "Currency": "1",
      "TaxExempt": "0",
      "CustomFields": {
        "1": {
          "id": "1",
          "fieldname": "VAT Number",
          "value": "01864610686"
        },
        "2": {
          "id": "2",
          "fieldname": "Codice Fiscale",
          "value": "01864610686"
        },
        "3": {
          "id": "3",
          "fieldname": "Codice Destinatario",
          "value": "0y66ih4"
        }
      },
      "Europe": {
        "MemberState": "IT",
        "Region": "Europe",
        "MonetaryUnion": true,
        "VIES": false,
        "MOSS": true
      }
    },
    "DocData": {
      "Type": "Invoice",
      "ID": "1999",
      "Num": "2020/133",
      "Status": "Paid",
      "Date": "2020-07-12",
      "DueDate": "2020-05-20",
      "DatePaid": "2020-07-12 22:28:39",
      "Subtotal": "0.00",
      "Credit": "10.00",
      "Tax": "0.00",
      "Tax2": "0.00",
      "TaxRate": "22.00",
      "TaxRate2": "0.00",
      "PaymentMethod": "katamaze_nexi",
      "Items": {
        "5374": {
          "ID": "5374",
          "Type": "Domain",
          "RelID": "33",
          "Description": "Domain Renewal - example.it - 1 Year/s (20/05/2020 - 19/05/2021)",
          "Amount": "10.00",
          "Taxed": "1"
        },
        "5377": {
          "ID": "5377",
          "Type": "",
          "RelID": "0",
          "Description": "Credit Applied",
          "Amount": "-10.00",
          "Taxed": "1"
        }
      }
    }
  }
}
```

The first public release of Billing Extension was 2014. Since then at the moment of writing this there have been 212 releases. As you can imagine 

* [Billing errors detection](https://katamaze.com/docs/billing-extension/28/warning-system)
* Snapshot customer and your [business's](https://katamaze.com/docs/billing-extension/23/company-profile) details
* [VIES](https://katamaze.com/docs/billing-extension/8/vies) that actually works

Sadly [WHMCS doesn't offer a valid billing system](https://katamaze.com/blog/23/what-is-whmcs-and-when-to-use-it-explained-for-beginners#Weaknesses-of-WHMCS). 
