<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body>
  <h2>My Instruments</h2>
  <table border="1">
    <tr bgcolor="#90C3D4">
      <th>Type</th>
      <th>Manfacture</th>
      <th>Model</th>
      <th>Note</th>
    </tr>
    <xsl:for-each select="instrument">
    <tr>
      <td><xsl:value-of select="type"/></td>
      <td><xsl:value-of select="manfacture"/></td>
      <td><xsl:value-of select="model"/></td>
      <td><xsl:value-of select="note"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>