# JSON to HTML Converter

This PHP function takes a JSON object and converts it into a structured HTML detail page. The function handles nested objects and arrays, displaying them appropriately in a user-friendly format.

## Features
- Converts JSON to HTML
- Handles nested objects and arrays
- Displays boolean values as 'Yes' or 'No'
- Escapes HTML characters for security

## Example

### Input JSON
```json
{
  "name": "Device",
  "domain": "Domain",
  "behaviorBlockerEnabled": true,
  "surfProtectionEnabled": false,
  "fileGuardEnabled": true,
  "protectionStatus": "Offline",
  "fixNowStatus": "Unknown",
  "malwareObjectsCount": 0,
  "settings": {
    "windowsUpdateState": "Undefined",
    "firewallState": {
      "value": "Undefined",
      "original": "Undefined"
    },
    "firewallActualState": "On",
    "rdpState": {
      "value": "On",
      "original": "On"
    },
    "rdpActualState": "On",
    "firewallName": "Windows",
    "networkLockdown": {
      "value": {
        "value": true,
        "original": true
      },
      "enabledOnGroupLevel": true,
      "groupGuid": "7cc8149d-b861-48ee-a0a0-50d19ba030f7",
      "groupName": "New computers"
    },
    "trafficRelay": true,
    "note": "Notes"
  },
  "updateStatus": {
    "lastUpdate": 60,
    "updateStatus": "Updating",
    "updateStatusMessage": "95%",
    "online": "Online"
  },
  "policyEdits": 0,
  "isRelayUsed": false,
  "relayStatus": "Undefined",
  "isProxyUsed": false,
  "protectionPolicyEdits": 0,
  "architecture": "64",
  "cores": 4,
  "browserSecurity": "Chrome",
  "product": "EES",
  "version": "2020.11",
  "updateFeed": "stable",
  "relaySaved": 0,
  "relaySavedUnit": "Kilobytes",
  "criticalEventsCount": 0,
  "disksCount": 0,
  "disks": [
    {
      "letter": "C",
      "total": 2,
      "free": 0
    }
  ],
  "networkAdapters": [
    {
      "name": "Ethernet1",
      "iPv4Addresses": [
        "192.168.0.1"
      ],
      "iPv6Addresses": []
    }
  ]
}

```

### Output HTML
```
<div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-xl">
    <h2 class="text-xl font-semibold mb-4">Device Details</h2>
    <p class="mb-4"><strong>Name:</strong> Device</p>
    <p class="mb-4"><strong>Domain:</strong> Domain</p>
    <p class="mb-4"><strong>Behavior Blocker Enabled:</strong> Yes</p>
    <p class="mb-4"><strong>Surf Protection Enabled:</strong> No</p>
    <p class="mb-4"><strong>File Guard Enabled:</strong> Yes</p>
    <p class="mb-4"><strong>Protection Status:</strong> Offline</p>
    <p class="mb-4"><strong>Fix Now Status:</strong> Unknown</p>
    <p class="mb-4"><strong>Malware Objects Count:</strong> 0</p>
    <div class="mb-4"><strong>Settings:</strong></div>
    <p class="mb-4"><strong>Windows Update State:</strong> Undefined</p>
    <div class="mb-4"><strong>Firewall State:</strong></div>
    <p class="mb-4"><strong>Value:</strong> Undefined</p>
    <p class="mb-4"><strong>Original:</strong> Undefined</p>
    <p class="mb-4"><strong>Firewall Actual State:</strong> On</p>
    <div class="mb-4"><strong>RDP State:</strong></div>
    <p class="mb-4"><strong>Value:</strong> On</p>
    <p class="mb-4"><strong>Original:</strong> On</p>
    <p class="mb-4"><strong>RDP Actual State:</strong> On</p>
    <p class="mb-4"><strong>Firewall Name:</strong> Windows</p>
    <div class="mb-4"><strong>Network Lockdown:</strong></div>
    <p class="mb-4"><strong>Value:</strong></p>
    <div class="mb-4"><strong>Value:</strong> Yes</div>
    <div class="mb-4"><strong>Original:</strong> Yes</div>
    <p class="mb-4"><strong>Enabled On Group Level:</strong> Yes</p>
    <p class="mb-4"><strong>Group Guid:</strong> 7cc8149d-b861-48ee-a0a0-50d19ba030f7</p>
    <p class="mb-4"><strong>Group Name:</strong> New computers</p>
    <p class="mb-4"><strong>Traffic Relay:</strong> Yes</p>
    <p class="mb-4"><strong>Note:</strong> Notes</p>
    <div class="mb-4"><strong>Update Status:</strong></div>
    <p class="mb-4"><strong>Last Update:</strong> 60</p>
    <p class="mb-4"><strong>Update Status:</strong> Updating</p>
    <p class="mb-4"><strong>Update Status Message:</strong> 95%</p>
    <p class="mb-4"><strong>Online:</strong> Online</p>
    <p class="mb-4"><strong>Policy Edits:</strong> 0</p>
    <p class="mb-4"><strong>Is Relay Used:</strong> No</p>
    <p class="mb-4"><strong>Relay Status:</strong> Undefined</p>
    <p class="mb-4"><strong>Is Proxy Used:</strong> No</p>
    <p class="mb-4"><strong>Protection Policy Edits:</strong> 0</p>
    <p class="mb-4"><strong>Architecture:</strong> 64</p>
    <p class="mb-4"><strong>Cores:</strong> 4</p>
    <p class="mb-4"><strong>Browser Security:</strong> Chrome</p>
    <p class="mb-4"><strong>Product:</strong> EES</p>
    <p class="mb-4"><strong>Version:</strong> 2020.11</p>
    <p class="mb-4"><strong>Update Feed:</strong> stable</p>
    <p class="mb-4"><strong>Relay Saved:</strong> 0</p>
    <p class="mb-4"><strong>Relay Saved Unit:</strong> Kilobytes</p>
    <p class="mb-4"><strong>Critical Events Count:</strong> 0</p>
    <p class="mb-4"><strong>Disks Count:</strong> 0</p>
    <div class="mb-4"><strong>Disks:</strong></div>
    <ul>
        <li><p class="mb-4"><strong>Letter:</strong> C</p>
            <p class="mb-4"><strong>Total:</strong> 2</p>
            <p class="mb-4"><strong>Free:</strong> 0</p>
        </li>
    </ul>
    <div class="mb-4"><strong>Network Adapters:</strong></div>
    <ul>
        <li><p class="mb-4"><strong>Name:</strong> Ethernet1</p>
            <div class="mb-4"><strong>IPv4 Addresses:</strong></div>
            <ul>
                <li><p class="mb-4"><strong></strong> 192.168.0.1</p></li>
            </ul>
            <div class="mb-4"><strong>IPv6 Addresses:</strong></div>
            <ul>
                <li><p class="mb-4"><strong></strong> </p></li>
            </ul>
        </li>
    </ul>
</div>
```

### Usage
1. Copy the generateHtmlFromJson.php file to your project.
2. Include the file in your PHP code:
```
include 'src/generateHtmlFromJson.php';
```
3. Call the generateHtmlFromJson function with your JSON data:
```
$json = '{
    "name": "Device",
    ...
}';
echo generateHtmlFromJson($json);
```

### License
This project is licensed under the MIT License - see the LICENSE file for details.

### Contributing
1. Fork the repository.
2. Create your feature branch (git checkout -b feature/AmazingFeature).
3. Commit your changes (git commit -m 'Add some AmazingFeature').
4. Push to the branch (git push origin feature/AmazingFeature).
5. Open a Pull Request.

### Contact
Raheel Khan - raheelk62@gmail.com

1. Github: https://github.com/raheelarifkhans
2. LinkedIn: https://linkedin.com/in/raheelarifkhans