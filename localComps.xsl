<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
  <h2>My Local Computers</h2>
  <table border="1">
    <tr bgcolor="#90C3D4">
      <th>Host Name</th>
      <th>User Name</th>
      <th>Password</th>
      <th>Note</th>
    </tr>
    <xsl:for-each select="CompName/comp">
    <tr>
      <td><xsl:value-of select="HostName"/></td>
      <td><xsl:value-of select="UserName"/></td>
      <td><xsl:value-of select="Password"/></td>
      <td><xsl:value-of select="Note"/></td>
    </tr>
    </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>