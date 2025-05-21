# JetEngine + CartFlows Variations Swatches
Allows to use CartFlows Variations Swatches inside JetEngine listing with Woo Data widget.

## Requiremnts
- **JetEngine + CartFlows Variations Swatches** addon itself (download it and install as the usual WP plugin);
- **JetEngine** version 3.7.0+ plugin installed - https://crocoblock.com/plugins/jetengine/;
- **WooCommerce** plugin installed - https://wordpress.org/plugins/woocommerce/;
- **CartFlows Variations Swatches** plugin installed - https://wordpress.org/plugins/variation-swatches-woo/;
- **Listing Wrapper** tags must be set to UL > LI, to ensure CartFlows Variations Swatches scripts can work correctly.

**Please note:**
If you missed any of these requirements you'll can't complete any of the next steps!

## How To Use
- Create JetEngine listing based on the WooCommerce query (https://crocoblock.com/knowledge-base/jetengine/jetengine-query-builder-wc-product-query-type/)
- Select UL > LI as listing wrapper tags
- Add Woo Data widget into the listing template
- Select Template Function as data type
- Select CartFlows Variation Swatches as function to render
- Add 2nd Woo Data widget and select Add to Cart template function to allow add selected variation to cart

## Screenshots
-  The result: JetEngine listing grid with variations swatches
  <img width="812" alt="image" src="https://github.com/user-attachments/assets/7ce80258-3f47-44ff-a871-3cb2678f5ef8" />
  
- Woo Data widget setup
  <img width="698" alt="image" src="https://github.com/user-attachments/assets/55165aad-1860-40fd-961c-d7427c396aef" />

## Notes
- Functionality supported by Elementor and Bricks builders and Blocks Editor
- Due to CartFlows Variations Swatches specific widgets shows nothing in the editor preview
