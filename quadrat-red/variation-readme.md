
### THIS THEME IS A GENERATED VARIATION THEME! DO NOT MODIFY THE CONTENTS.

In order to make changes to this theme change the details in the /varations folder that coorisponds to this theme.

Then re-run the `build-variations.mjs` script via the command `npm run build:variations` in the root of the /themes project.

### Variations

The first level of folders coorispond to the Blockbase theme that will be used as the SOURCE of the variation.

The second level of folders coorispond to the Blockbase theme that will be created as the variation.

For example:

/variations
	/geologist
		/geologist-banana

For a variation in that folder `/variations/geologist/geologist-banana` 

* First the relevant portions of the theme `/geologist` will be copied to `/geologist-banana`.
* Next the contents of `/variations/geologist/geologist-banana` will be copied to `/geologist-banana`
* Lastly the theme.json files in `/geologist` and `/variations/geologist/geologist-banana` will be merged.

Any resource in the /variations folder will replace the resources in the source theme (with the exception of theme.json);

### Template Mods

A variation can have a `template-mods.json` file that lists strings in the templates to replace.  The use-case this mechanism was build
for was so that the variation theme could have a different header by defining that in one place.  There are plenty of gaps in this
implementation but should cover the basic use-cases we need.

The format for this file is:

```
[
	{
		"from": "STRING TO REPLACE",
		"to": "STRING TO BE USED AS REPLACEMENT"
	}
]
```